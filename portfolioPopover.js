// JavaScript Document
// create project description popover
function lib_portfolio_popover () {

  this.projectDescription = function(projectID) {
    $('#text').html(
      '<div id = "project_title">' + projectID.title + '</div></br>' +
      '<div id = "project_year">' + projectID.date + '</div></br>' +
        (projectID.team != 'NA' ?
          '<p class="paragraph" id="project_team">' +
            '<font class="title">Team members: </font>' +
            projectID.team +
          '</p>'
          : '') +

        (projectID.url != 'NA' ?
          '<p><a href="' + projectID.url + '" class = "title" id="project_link" target="_blank">' +
            'Link' +
          '</a></p>'
          : '') +

        '<p id = "project_summary" class="paragraph">' +
          '<font class="title">Summary: </font>' +
          projectID.summary +
        '</p>' +

        (projectID.role != 'NA' ?
          '<p class="paragraph" id="project_role">' +
            '<font class="title">Primary Role: </font>' +
            projectID.role +
          '</p>'
          : '') +

        '<p id="project_skills" class="paragraph">' +
          '<font class="title">Skills: </font>' +
          projectID.skills +
        '</p>'
    );
  };

  this.resize = function() {
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();

    if (windowHeight > windowWidth) {
      $('#info_page').css( { width : windowWidth - 20 + 'px' } );
      $('#info_page').css( { marginLeft : '10px' } );
    } else {
      $('#info_page').css( { width : windowHeight - 20 + 'px'} );
      $('#info_page').css( { marginLeft : ((windowWidth - windowHeight + 20)/2) + 'px' } );
    }

    var gallery_ratio = $('#info_page').height() / $('#info_page').width();
    var photo = document.getElementById('photo');
    var photo_ratio = photo.naturalHeight / photo.naturalWidth;

    // photo height is greater than width
    if (photo_ratio > 1) {
      if (photo_ratio > 2 * gallery_ratio) {
        $('#gallery').css( { height : '100%', width : '50%', top : '0px', left : '0px'} );
        $('#text').css( { height : '100%', width: '50%', top : '0px', left : '50%'} );
        $('#close').css( { left : '0px' } );
      } else {
        var photo_width = ($('#info_page').height() / 2) / photo_ratio;
        var marginLeft = ($('#info_page').width() - photo_width) / 2;

        $('#gallery').css( { height : '50%', width : photo_width + 'px', top : '0px', left : marginLeft  + 'px' } );
        $('#text').css( { height : '50%', width: photo_width + 'px', top : '50%', left : marginLeft  + 'px'} );
        $('#close').css( { left : marginLeft + 'px' } );
      }
    }

    // photo width is greater than height
    else {
      if (photo_ratio > gallery_ratio / 2) {
        var photo_width = ($('#info_page').height() / 2) / photo_ratio;
        var marginLeft = ($('#info_page').width() - photo_width) / 2;

        $('#gallery').css( { height: '50%', width: photo_width + 'px', top : '0px', left : marginLeft  + 'px' } );
        $('#text').css( { height : '50%', width: photo_width + 'px', top : '50%', left : marginLeft  + 'px' } );
        $('#close').css( { left : marginLeft + 'px' } );
      } else {
        var photo_height = $('#info_page').width() * photo_ratio;
        var marginTop = (($('#info_page').height() / 2) - photo_height) / 2;

        $('#gallery').css( { height: photo_height + 'px', width:'100%',  top : marginTop + 'px', left : '0px' } );
        $('#text').css( { height : '50%', width: '100%', top : '50%', left : '0px' } );
        $('#close').css( { left : '0px' } );
      }
    }
  };

  $('body').append(
    '<div id = "opacity_page" ></div>' +

    '<div id = "info_page">' +
      '<div id="close">' +
        '<img id="delete_box" src="images/close_box.png"/>' +
        'Close' +
      '</div>' +

      '<div id = "gallery">' +
        '<img id = "photo"/>' +
      '</div>' +

      '<div id = "text"></div>' +
    '</div>'
  );
}
