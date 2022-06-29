window.addEventListener('load', init);

/**
 * Execute after document is fully loaded
 */
let button

function init() {
    button = document.getElementById('show-description');
    button.addEventListener('click', buttonClickHandler);

}

function buttonClickHandler() {

    button.innerHTML = "ewa";
    // let descriptionContent = document.createElement('div');
    // descriptionContent.classList.add('description-content');

}


//     //Find all li items
//     let li = document.getElementsByTagName('li');
//
//     //Add event listener to all items
//     for (let i = 0; i < li.length; i++) {
//         li[i].addEventListener('click', liClickHandler);
//     }
// }

// document.getElementById('todo-input').value = "";
// document.getElementById('message').innerHTML = textInput + " is toegevoegd";
