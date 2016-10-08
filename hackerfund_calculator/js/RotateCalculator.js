// JavaScript Document

jQuery(document).ready(function () {
    $('#tridiv').on('mousedown',createMouseMoveFunction);
	$('.scene').css('rotateX',-50);
	$('.scene').css('rotateY',0);
});

function createMouseMoveFunction(e) {
    firstX = e.pageX;
    firstY = e.pageY;
    firstRY = parseInt($('.scene').css('rotateY'));
    firstRX = parseInt($('.scene').css('rotateX'));
    CubeMove = true;
    $('#tridiv').off('mousedown',createMouseMoveFunction);
    $(document).on('mousemove',MouseMove);
    $(document).on('mouseup',removeMouseMoveFunction);
}

function MouseMove(el) {
    if(CubeMove){
        $('.scene').css({
            rotateY: firstRY + (el.pageX - firstX),
            rotateX: firstRX + (firstY - el.pageY)
        });
    }
    
};

function removeMouseMoveFunction() {
    CubeMove = false;
    $(document).off('mousemove',MouseMove);
    $(document).off('mouseup',removeMouseMoveFunction);
    $('#tridiv').on('mousedown',createMouseMoveFunction);
};