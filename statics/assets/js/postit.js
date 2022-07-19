let posList = document.querySelector('#posList');
let form = document.querySelector('#addpostit');

function renderpostit(doc) {
    let li = document.createElement('li');
    let articles = document.createElement('span');
    let location = document.createElement('span');
    let province = document.createElement('span');
    let district = document.createElement('span');
    let road = document.createElement('span');
    let address = document.createElement('span');
    let name = document.createElement('span');
    let phone_number = document.createElement('span');

    li.setAttribute('data-id', doc.id);
    articles.textContent = doc.data().articles;
    location.textContent = doc.data().location;
    province.textContent = doc.data().province;
    district.textContent = doc.data().district;
    road.textContent = doc.data().road;
    address.textContent = doc.data().address;
    name.textContent = doc.data().name;
    phone_number.textContent = doc.data().phone_number;

    li.appendChild(articles);
    li.appendChild(location);
    li.appendChild(province);
    li.appendChild(district);
    li.appendChild(road);
    li.appendChild(address);
    li.appendChild(name);
    li.appendChild(phone_number);

    posList.appendChild(li);

}

db.collection('postit').get().then(postit => {
    postit.docs.forEach(doc => {
        console.log(doc.data())
        renderpostit(doc);
    })
});

form.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('postit').add({
        articles: form.articles.value,
        location: form.location.value,
        province: form.province.value,
        district: form.district.value,
        road: form.road.value,
        address: form.address.value,
        name: form.name.value,
        phone_number: form.phone_number.value,
    })

    form.articles.value = '';
    form.location.value = '';
    form.province.value = '';
    form.district.value = '';
    form.road.value = '';
    form.address.value = '';
    form.name.value = '';
    form.phone_number.value = '';

});