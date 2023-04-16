const urlParams = new URLSearchParams(window.location.search);
const shapeString = urlParams.get('shapeString');


function renderShape(shapeString = "", container = document.createElement("div")) {
    const patternLines = shapeString.split("\n")

    const table = document.createElement("table")
    const tableBody = document.createElement("tbody")

    patternLines.forEach(line => {

        const tableRow = document.createElement("tr")

        line.split("").forEach(column => {
            tableRow.innerHTML += `<td style="background-color: ${column == "*" ? "black" : "white"}; width: 20px; height: 20px"></td>`
        })

        tableBody.appendChild(tableRow)

    })

    table.appendChild(tableBody)
    container.innerHTML = ""
    container.appendChild(table)
}