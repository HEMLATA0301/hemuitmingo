// Disable right-click context menu
document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
});

// Disable certain keyboard shortcuts for Inspect Element and View Source
document.onkeydown = function(e) {
    // Disable Ctrl+Shift+I (Inspect)
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
    }

    // Disable Ctrl+U (View Source)
    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
    }

    // Disable F12 (Developer Tools)
    if (e.keyCode == 123) { // 123 is the key code for F12
        return false;
    }
};



  
