const blikButton = document.querySelector('.blik')
const blikModal = document.getElementById('blikModal')
const blikCodeElement = document.getElementById('blikCode')
const copyButton = document.getElementById('copyBlik')
const cancelButton = document.getElementById('cancelBlik')

function generateBlikCode() {
	return Math.floor(100000 + Math.random() * 900000)
}

blikButton.addEventListener('click', function () {
	const blikCode = generateBlikCode()
	blikCodeElement.textContent = blikCode
	blikModal.style.display = 'flex'
})

copyButton.addEventListener('click', function () {
	navigator.clipboard.writeText(blikCodeElement.textContent).then(() => {
		alert('Kod BLIK skopiowany!')
	})
})

cancelButton.addEventListener('click', function () {
	blikModal.style.display = 'none'
})

window.addEventListener('click', function (event) {
	if (event.target === blikModal) {
		blikModal.style.display = 'none'
	}
})


// Pulpit/Płatności
function openPaymentScreen() {
	document.getElementById('paymentScreen').classList.remove('d-none')
}

function closePaymentScreen() {
	document.getElementById('paymentScreen').classList.add('d-none')
}

function showDashboard() {
	document.getElementById('paymentScreen').classList.add('d-none')
}
document.addEventListener('DOMContentLoaded', function () {
	const transferButton = document.querySelector('.bottom-section .transfer')
	if (transferButton) {
		transferButton.addEventListener('click', openPaymentScreen)
	}

	const pulpitButton = document.querySelector('.bottom-section .pulpit')
	if (pulpitButton) {
		pulpitButton.addEventListener('click', showDashboard)
	}
})


