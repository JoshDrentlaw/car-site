const select = document.getElementById('makerSelect');
let maker = Makes[0]; // Default on select drop down
let thisYear = new Date().getFullYear();

const modelTable = document.getElementById('modelTable');
const modelTableBody = document.getElementById('modelTableBody');
const tableLoader = document.getElementById('tableLoader');

function createEl(el, content, attrs=null) {
    const node = document.createElement(el);
    node.innerHTML = content;

    if (attrs !== null) {
        attrs.map(attr => {
            node.setAttribute(attr.name, attr.value.toLowerCase());
        })
    }
    return node;
}

function handleChange(e) {
    maker = e.target.value;
}

select.addEventListener('change', handleChange);

function getModels() {
    modelTable.classList.add('d-none');
    tableLoader.classList.remove('d-none');
    fetch(`https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeYear/make/${maker}/modelyear/${thisYear}/vehicletype/car?format=json`)
        .then(res => res.json())
        .then(data => {
            tableLoader.classList.add('d-none');
            showModels(data.Results);
        });
}

function showModels(models) {
    modelTable.classList.remove('d-none');
    const tableData = models.map(model => {
        return `
            <tr>
                <td>${maker}</td>
                <td>${model.Model_Name}</td>
                <td>${thisYear}</td>
            </tr>
        `;
    });
    modelTableBody.innerHTML = tableData.join('');
}