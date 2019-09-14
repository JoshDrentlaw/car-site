function handleClick() {
    fetch('https://vpic.nhtsa.dot.gov/api/vehicles/getallmakes?format=json')
        .then(data => data.json())
        .then(data => {
            console.log(data);
            showCount(data.Count);
        });
}

function showCount(count) {
    let content = `Got ${count} results.`;
    let el = createEl('P', content, 'text-center mt-5');
    document.getElementById('content').appendChild(el);
}

function createEl(el, content, classes=null) {
    const node = document.createElement(el);
    const inner = document.createTextNode(content);
    node.appendChild(inner);

    if (classes !== null) {
        node.className = classes;
    }
    return node;
}