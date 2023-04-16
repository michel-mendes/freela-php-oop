const urlParams = new URLSearchParams(window.location.search)
const view = urlParams.get('view')

const shapeString = document.getElementById("indexScript").getAttribute("data_shape_string")


if (view && view == "console") {
    console.log(shapeString)
}
else {
    const renderContainer = document.getElementById("tableContainer")
    renderShape(shapeString, renderContainer)
}


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