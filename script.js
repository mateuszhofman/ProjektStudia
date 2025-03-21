const blikButton = document.querySelector('.blik')
const blikModal = document.getElementById('blikModal')
const blikCodeElement = document.getElementById('blikCode')
const closeButton = document.querySelector('.close')

function generateBlikCode() {
	return Math.floor(100000 + Math.random() * 900000)
}

blikButton.addEventListener('click', function () {
	const blikCode = generateBlikCode()
	blikCodeElement.textContent = blikCode
	blikModal.style.display = 'block'
})

closeButton.addEventListener('click', function () {
	blikModal.style.display = 'none'
})

window.addEventListener('click', function (event) {
	if (event.target === blikModal) {
		blikModal.style.display = 'none'
	}
})
