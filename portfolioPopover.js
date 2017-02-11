// JavaScript Document
// create project description popover
function lib_portfolio_popover () {

    this.createDescription = function(projectID) {
        $('#text').html(
            '<div id = "project_title">' + projectID.title + '</div></br>' +
            '<div id = "project_year">' + projectID.date + '</div></br>' +

            (projectID.team != "NA" ?
                '<p class="paragraph" id="project_team">' +
                    '<font class="title">Team members: </font>' +
                    projectID.team +
                 '</p>'
            : '') +

            (projectID.url != "NA" ?
                '<p><a href="' + projectID.url + '" class = "title" id="project_link" target="_blank">' +
                    'Link' +
                '</a></p>'
            : '') +

            '<p id = "project_summary" class="paragraph">' +
                '<font class="title">Summary: </font>' +
                projectID.summary +
            '</p>' +

             (projectID.role != "NA" ?
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
    }

}
