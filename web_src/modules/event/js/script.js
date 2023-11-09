document.addEventListener('DOMContentLoaded', function() {

    let deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            let eventId = button.getAttribute('data-event-id');

            // Ask for confirmation
            let confirmation = confirm('Voulez-vous vraiment supprimer cet événement ?');
            if (confirmation) {
                // User clicked "OK" in the confirmation dialog, proceed with deletion
                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Image deleted successfully, remove the image from the page
                        let eventBox = button.closest('.event-box');
                        eventBox.remove();
                    } else if (xhr.readyState === 4) {
                        // Handle error if needed
                        console.error("Impossible de supprimer l'événement.");
                    }
                };

                xhr.open('POST', 'requires/delete_event.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('event_id=' + eventId);
            } else {
                // User clicked "Cancel" in the confirmation dialog, do nothing
            }
        });
    });


    const editButtons = document.querySelectorAll('.edit-button');
    
    editButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const eventId = button.getAttribute('data-event-id');
            const editContainer = document.querySelector(`#edit-container-${eventId}`);
            const editedTitleInput = document.querySelector(`#edited-title-${eventId}`);
            const editedPlaceInput = document.querySelector(`#edited-place-${eventId}`);
            const editedDateInput = document.querySelector(`#edited-date-${eventId}`);

            // Set the value of the input with the previous fields
            const titleElement = document.querySelector('#title-' + eventId);
            const placeElement = document.querySelector('#place-' + eventId);
            const dateElement = document.querySelector('#date-' + eventId);

            const previousTitle = titleElement.textContent.trim();
            const previousPlace = placeElement.textContent.trim();
            const previousDate = dateElement.textContent.trim();

            // Remove prefixes from previous values
            const cleanedPlace = previousPlace.startsWith("Location : ") ? previousPlace.slice("Location : ".length) : previousPlace;
            const formattedPreviousDate = previousDate.replace("Date : ", "").replace(" ", "T");

            editedTitleInput.value = previousTitle;
            editedPlaceInput.value = cleanedPlace;
            editedDateInput.value = formattedPreviousDate;

            // Toggle the display of the edit container
            if (editContainer.style.display === 'none') {
                editContainer.style.display = 'block';
            } else {
                editContainer.style.display = 'none';
            }

            // Handle "Save" button click
            const saveButton = document.querySelector('#save-button-' + eventId);
            saveButton.addEventListener('click', function() {
                const editedTitle = document.querySelector('#edited-title-' + eventId).value;
                const editedPlace = document.querySelector('#edited-place-' + eventId).value;
                const editedDate = document.querySelector('#edited-date-' + eventId).value;

                // Send an AJAX request to update the database with the edited event
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Update the event element with the edited value
                        titleElement.textContent = editedTitle;
                        placeElement.textContent = editedPlace;
                        dateElement.textContent = editedDate;

                        // Hide the edit container
                        const editContainer = document.querySelector(`#edit-container-${eventId}`);
                        editContainer.style.display = 'none';
                    } else if (xhr.readyState === 4) {
                        // Handle error if needed
                        console.error("Impossible d'éditer l'événement");
                    }
                };

                // Prepare data for the AJAX request
                const data = new FormData();
                data.append('event_id', eventId);
                data.append('title', editedTitle);
                data.append('place', editedPlace);
                data.append('date', editedDate);

                // Send a POST request to update_event.php
                xhr.open('POST', 'requires/edit_event.php', true);
                xhr.send(data);
            });

            const cancelButton = document.querySelector('#cancel-button-' + eventId);
            cancelButton.addEventListener('click', function() {
                editContainer.style.display = 'none';
            })

        });
    });
});
