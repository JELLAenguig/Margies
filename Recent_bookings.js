Bookings.forEach(book => {
    const tr =document.createElement('tr');
    const trContent = `
                    <td>${book.CustomerName}</td>
                    <td>${book.Service}</td>
                    <td>${book.Date}</td>
                    <td>${book.Payment}</td>
                    <td>${book.Status}</td>
                    <td class="primary">Details</td>
                      `;
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
})
