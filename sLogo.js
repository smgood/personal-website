// JavaScript Document
// create 3D portfolio

function sLogo (container) {
    var scene, camera, group, renderer;
    var animationRequest;

    var particleVelocities;
    var positions,colors;
    var pointCloud;
    var particlePositions;
    var linesMesh;
    var particleCount;

    var maxParticleCount = 500;
    var sHeight = 800;
    var rHalf = sHeight / 2;
    var collision_rad = 100;
    var minDistance = 60;
    var flipped = 1;
    var explode;

    init ();

    function init () {
        scene = new THREE.Scene();

        group = new THREE.Group();
        scene.add( group );

        camera = new THREE.PerspectiveCamera( 45, window.innerWidth / (window.innerHeight), 1, 10000 );
        camera.position.z = 1300;

        renderer = new THREE.WebGLRenderer( { antialias: true, alpha: true } );
        renderer.setClearColor( 0xffffff, 0 ); // the default
        renderer.setPixelRatio( window.devicePixelRatio );

        renderer.gammaInput = true;
        renderer.gammaOutput = true;

        container.appendChild( renderer.domElement );
    };

    var instantiateLogo = function() {
        explode = false;
        particleVelocities = [];
        particleCount = 10;

        var segments = maxParticleCount * maxParticleCount;

        positions = new Float32Array( segments * 3 );
        colors = new Float32Array( segments * 3 );

        var pMaterial = new THREE.PointCloudMaterial({
            color: 0xFFFFFF,
            size: 5,
            blending: THREE.AdditiveBlending,
            transparent: true,
            sizeAttenuation: true
        });

        particles = new THREE.BufferGeometry();
        particlePositions = new Float32Array( maxParticleCount * 3 );

        for ( var i = 0; i < maxParticleCount; i++ ){
            var x;
            var y = sHeight * 4/3 * (Math.random() - 0.5);
            var z = 2 * collision_rad * (Math.random() - 0.5);

            if (y>rHalf){
                y = y - rHalf/3;
                x = 15*Math.sqrt(rHalf-y) + ((Math.random() * 2 - 1) * collision_rad);
            } else if (y< -rHalf){
                y = y + rHalf/3;
                x = -15*Math.sqrt(rHalf+y) + ((Math.random() * 2 - 1) * collision_rad);
            } else {
                x = (-Math.sin(y * Math.PI / rHalf) * rHalf/2) + ((Math.random() * 2 - 1) * collision_rad);
            }

            particlePositions[ i * 3     ] = x;
            particlePositions[ i * 3 + 1 ] = y;
            particlePositions[ i * 3 + 2 ] = z;

            // add it to the geometry
            particleVelocities.push(
                new THREE.Vector3(Math.random() - 0.5, Math.random() - 0.5,  Math.random() - 0.5)
            );
        }

        particles.drawcalls.push({
            start: 0,
            count: particleCount,
            index: 0
        });

        particles.addAttribute( 'position', new THREE.DynamicBufferAttribute( particlePositions, 3 ) );

        // create the particle system
        pointCloud = new THREE.PointCloud( particles, pMaterial );
        group.add( pointCloud );

        var geometry = new THREE.BufferGeometry();

        geometry.addAttribute( 'position', new THREE.DynamicBufferAttribute( positions, 3 ) );
        geometry.addAttribute( 'color', new THREE.DynamicBufferAttribute( colors, 3 ) );

        geometry.computeBoundingSphere();

        geometry.drawcalls.push({
            start: 0,
            count: 0,
            index: 0
        });

        var material = new THREE.LineBasicMaterial({
            vertexColors: THREE.VertexColors,
            blending: THREE.AdditiveBlending,
            transparent: true
        });

        linesMesh = new THREE.Line( geometry, material, THREE.LinePieces );
        group.add( linesMesh );
    };

    var animate = function() {

        var vertexpos = 0;
        var colorpos = 0;
        var numConnected = 0;

        if (particleCount < maxParticleCount){
            particleCount+=10;
            particles.drawcalls[ 0 ].count = particleCount;
        }

        for ( var i = 0; i < particleCount; i++ ) {

            // get the particle
            var particleVelocity = particleVelocities[i];

            particlePositions[ i * 3     ] += particleVelocity.x;
            particlePositions[ i * 3 + 1 ] += particleVelocity.y;
            particlePositions[ i * 3 + 2 ] += particleVelocity.z;

            xPos = particlePositions[ i * 3];
            yPos = particlePositions[ i * 3 +1];
            zPos = particlePositions[ i * 3 +2];

            if (explode){
                particleVelocity.x *= 1.07;
                particleVelocity.y *= 1.07;
                particleVelocity.z *= 1.07;
            }

            else {
                if (Math.abs(zPos) > collision_rad)
                    particleVelocity.z *= -1;

                if (Math.abs(yPos) > rHalf){
                    particleVelocity.y *= -1;
                }
                // boundary conditions for top quadratic part of S
                else if (xPos > 0 && yPos > rHalf/2 && yPos < 2*rHalf/3){
                    particleVelocity.y *= -1;
                } else if (xPos > 0 && yPos > 2*rHalf/3){
                    var estimated_width = 15*Math.sqrt(rHalf-yPos);
                    var rad_quad = Math.abs(xPos - estimated_width);
                    if (rad_quad > collision_rad){
                        var surfaceVector = new THREE.Vector2(
                            -15/(2*Math.sqrt(rHalf-yPos)),
                            1
                        );
                        particleVelocity = getVectorDeflection (particleVelocity, surfaceVector);

                        if (rad_quad > (1.1 * collision_rad)){
                            particlePositions[ i * 3] = estimated_width;
                        }
                    }
                }
                // boundary conditions for bottom quadratic part of S
                else if (xPos < 0 && yPos < -rHalf/2 && yPos > -2*rHalf/3){
                    particleVelocity.y *= -1;
                } else if (xPos < 0 && yPos < -2*rHalf/3){
                    var estimated_width = -15*Math.sqrt(rHalf+yPos);
                    var rad_quad = Math.abs(xPos - estimated_width);
                    if (rad_quad > collision_rad){
                        var surfaceVector = new THREE.Vector2(
                            -15/(2*Math.sqrt(rHalf+yPos)),
                            1
                        );
                        particleVelocity = getVectorDeflection (particleVelocity, surfaceVector);

                        if (rad_quad > (1.1 * collision_rad)){
                            particlePositions[ i * 3] = estimated_width;
                        }
                    }
                }
                // boundary conditions for middle Sin Wave part of S
                else {
                    var expected_width = -Math.sin(yPos * Math.PI / rHalf) * rHalf/2;
                    var rad_sin = Math.abs(xPos - expected_width);
                    if (rad_sin > collision_rad){
                        var surfaceVector = new THREE.Vector2(
                            -Math.cos(yPos * Math.PI / rHalf),
                            1
                        );
                        particleVelocity = getVectorDeflection (particleVelocity, surfaceVector);

                        if (rad_sin > (1.1 * collision_rad)){
                            particlePositions[ i * 3] = expected_width;
                        }
                    }
                }
            }

            // Check collision
            for ( var j = i + 1; j < particleCount; j++ ) {
                var dx = particlePositions[ i * 3     ] - particlePositions[ j * 3     ];
                var dy = particlePositions[ i * 3 + 1 ] - particlePositions[ j * 3 + 1 ];
                var dz = particlePositions[ i * 3 + 2 ] - particlePositions[ j * 3 + 2 ];
                var dist = Math.sqrt( dx * dx + dy * dy + dz * dz );

                if ( dist < minDistance ) {
                    var alpha = 1.0 - dist / minDistance;

                    positions[ vertexpos++ ] = particlePositions[ i * 3     ];
                    positions[ vertexpos++ ] = particlePositions[ i * 3 + 1 ];
                    positions[ vertexpos++ ] = particlePositions[ i * 3 + 2 ];

                    positions[ vertexpos++ ] = particlePositions[ j * 3     ];
                    positions[ vertexpos++ ] = particlePositions[ j * 3 + 1 ];
                    positions[ vertexpos++ ] = particlePositions[ j * 3 + 2 ];

                    // need to account for x position
                    if (flipped * particlePositions[ i * 3 + 1 ] < ( 1042 * (scroll_height/window.innerHeight - 47/400)) - 400)
                        alpha = (40 / 255) * (1-alpha) + alpha;

                    colors[ colorpos++ ] = alpha;
                    colors[ colorpos++ ] = alpha;
                    colors[ colorpos++ ] = alpha;

                    colors[ colorpos++ ] = alpha;
                    colors[ colorpos++ ] = alpha;
                    colors[ colorpos++ ] = alpha;

                    numConnected++;
                }
            }
        }

        linesMesh.geometry.drawcalls[ 0 ].count = numConnected * 2;
        linesMesh.geometry.attributes.position.needsUpdate = true;
        linesMesh.geometry.attributes.color.needsUpdate = true;

        pointCloud.geometry.attributes.position.needsUpdate = true;

        rotate ();
        renderer.render( scene, camera );
        animationRequest = requestAnimationFrame( animate );
    };

    var getVectorDeflection = function (particleVelocity, surfaceVector) {
        var magnitude = Math.sqrt(
            Math.pow(surfaceVector.x,2) +
            Math.pow(surfaceVector.y,2)
        );
        var surfaceNormal = new THREE.Vector2(
            -1 * surfaceVector.y / magnitude,
            surfaceVector.x / magnitude
        );
        var dotProduct = (
            particleVelocity.x * surfaceNormal.x +
            particleVelocity.y * surfaceNormal.y
        );

        particleVelocity.x -= 2 * dotProduct * surfaceNormal.x;
        particleVelocity.y -= 2 * dotProduct * surfaceNormal.y;
        return particleVelocity;
    }

    var dispose = function () {
        group.remove( pointCloud );
        group.remove( linesMesh );

        // mesh.dispose(); // new
        // geometry.dispose();
        // material.dispose();
        // texture.dispose();
    };

    var onWindowResize = function () {
        camera.aspect = window.innerWidth / (window.innerHeight);
        camera.updateProjectionMatrix();
        renderer.setSize( window.innerWidth, window.innerHeight);

        //$.fn.fullpage.reBuild();
    };

    var rotate = function() {
        var time = Date.now() * 0.00015;
        var rotation;
        if (time%4 < 1){
            rotation = (1-Math.pow(Math.sin(time%2 * Math.PI/2),2)) * Math.PI;
            flipped = -1 * Math.cos(time%4 * Math.PI);
        } else if (time%4 < 2){
            rotation = 0;
            flipped = 1;
        } else if (time%4 < 3){
            rotation = Math.pow(Math.sin(time%2 * Math.PI/2),2) * Math.PI;
            flipped = Math.cos(time%4 * Math.PI);
        } else{
            rotation = Math.PI;
            flipped = -1
        }
        group.rotation.y = rotation;
        group.rotation.x = rotation;
    };

    this.play = function () {
        dispose();
        instantiateLogo();
        onWindowResize();

        if (!animationRequest) {
            animationRequest = requestAnimationFrame( animate );

            $(container).show();
            window.addEventListener('resize', onWindowResize);
        }
    };

    this.stop = function () {
        dispose();

        cancelAnimationFrame( animationRequest );
        animationRequest = null;

        $(container).hide();
        window.removeEventListener('resize', onWindowResize);
	};

    this.explode = function () {
        explode = true;
    };

    this.isExploding = function () {
        return explode;
    };
}
