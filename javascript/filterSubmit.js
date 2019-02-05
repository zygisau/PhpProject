// var form = document.getElementById('filter');
// var submit = document.getElementById('filter-submit');
//
// function hasClass(element, cls) { // Check if contains class
//     return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
// }
//
// function formValidation() {
//     var formNodes = form.childNodes; // childs of form
//     var error = false;
//     for (var i = 0; i < formNodes.length; i++) {
//         var divNodes = formNodes[i].childNodes; // childs of divs that contains inputs
//         for (var k = 0; k < divNodes.length; k++) {
//             if (hasClass(divNodes[k], 'err-input')) { // has class 'err-input'
//                 error = true;
//                 break;
//             }
//         }
//     }
//
//     if (!error)
//         submit.disabled = false; // if there is no input with class 'err-input', enable submit button
// }
//
// formValidation();