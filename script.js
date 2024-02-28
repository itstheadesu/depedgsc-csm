// MULTIFORM PAGING
function nextSection(sectionId) {
    // Hide current section
    $('.form-section:visible').hide();
    // Show next section
    $('#section' + sectionId).show();
    // Update progress bar
    updateProgressBar(sectionId);
}

function previousSection(sectionId) {
    // Hide current section
    $('.form-section:visible').hide();
    // Show previous section
    $('#section' + sectionId).show();
    // Update progress bar
    updateProgressBar(sectionId);
}