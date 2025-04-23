async function onGetCars() {
    console.log('hi from getCars')
    const res = await fetch('api/car.php?q=')
    const cars = await res.json()
    console.log('Cars:', cars)
    document.querySelector('pre').innerText = JSON.stringify(cars, null, 2)
}