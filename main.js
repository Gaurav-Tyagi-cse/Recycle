
const wasteData = {
    ewaste: `
        <div class="content-box d-flex">
            <div class="w-75">
                <h3>e-Waste</h3>
                <p>e-Waste is the fastest-growing waste stream consisting of a complex combination of key elements like Plastic, Iron, aluminium, copper, silver, gold, palladium and many more. The rapid advancement of technology has resulted in a higher waste ratio of electronic products, which impacts adversely if not recycled formally.</p>
                <button class="btn btn-outline-primary">Read More</button>
            </div>
            <div class="w-25 text-center">
                <img src="images/e_waste.png" alt="e-Waste Image" class="img-fluid rounded">
            </div>
        </div>
    `,
    plastic: `
        <div class="content-box">
            <h3>Plastic Waste</h3>
            <p>Plastic waste includes all types of plastic, which contributes heavily to environmental pollution. Recycling can significantly mitigate its negative impact.</p>
            <button class="btn btn-outline-primary">Read More</button>
        </div>
    `,
    battery: `
        <div class="content-box">
            <h3>Battery Waste</h3>
            <p>Battery waste includes discarded batteries from various electronic devices. Proper disposal is crucial to prevent toxic contamination.</p>
            <button class="btn btn-outline-primary">Read More</button>
        </div>
    `,
    tyre: `
        <div class="content-box">
            <h3>Tyre Waste</h3>
            <p>Tyre waste consists of used or discarded tires. Recycling reduces the risk of environmental hazards caused by burning tires.</p>
            <button class="btn btn-outline-primary">Read More</button>
        </div>
    `,
    hazardous: `
        <div class="content-box">
            <h3>Hazardous Waste</h3>
            <p>Hazardous waste includes substances harmful to the environment and human health. Proper handling and disposal are essential.</p>
            <button class="btn btn-outline-primary">Read More</button>
        </div>
    `
};

function showContent(type) {
    const contentDiv = document.getElementById('waste-content');
    contentDiv.innerHTML = wasteData[type];
}
function showContent(option) {
    const content = {
        ewaste: 'E-waste content goes here.',
        plastic: 'Plastic waste content goes here.',
        battery: 'Battery waste content goes here.',
        tyre: 'Tyre waste content goes here.',
        hazardous: 'Hazardous waste content goes here.'
    };
    document.getElementById('waste-content').innerText = content[option] || 'Content not available.';
}