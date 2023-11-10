function updateDisplayStatus(eventId, isChecked) {
    fetch('requires/update_display_status.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            eventId: eventId,
            isChecked: isChecked,
        }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response if needed
        console.log(data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}
