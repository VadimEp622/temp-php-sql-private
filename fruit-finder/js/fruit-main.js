async function onHandelChange(ev) {
    console.log('what?')
    const { value } = ev.target
    if (value.length < 2) return
    const res = await fetch(`api/fruit.php?q=${value}`)

    const fruits = await res.json()
    document.querySelector('pre').innerText = JSON.stringify(fruits, null, 2)
}
