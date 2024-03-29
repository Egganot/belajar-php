const cardData = [
    {
        nama:'Pisang',
        harga:'36.000'
    },
    {
        nama:'Apel',
        harga:'52.000'
    },
    {
        nama:'Durian',
        harga:'155.000'
    },
    {
        nama:'Duku',
        harga:'18.500'
    },
    {
        nama:'Blewah',
        harga:'23.000'
    },
    {
        nama:'Anggur',
        harga:'53.000'
    },
    {
        nama:'Semangka',
        harga:'37.000'
    },
    {
        nama:'Nanas',
        harga:'73.000'
    },
]

const postContainer = document.querySelector('.card-container');
const postMethods = () => {
    cardData.map((postData)=>{
        console.log(postData);
        const postElement = document.createElement('div');
        postElement.classList.add('card');
        postElement.innerHTML = `
        <a href="#">
            <img src="../assets/img/${postData.nama}.png" alt="Image" class="card-image">
            <h3 class="card-title">${postData.nama}</h3>
            <p class="card-body">Rp.${postData.harga}/kg</p>
        </a>
        `
        postContainer.appendChild(postElement)
    })
}

postMethods()