const tagPricing = document.getElementById('add-investment');
const addInvestButton = document.getElementById('invest-btn');
const removeInvestmentsButton = document.getElementById('back-InvestmentModal');
const removePlanDetailButton = document.getElementById('back-plansModal');
const investHeading1 = document.getElementById('header1');
const investHeading2 = document.getElementById('header2');
const investHeading3 = document.getElementById('header3');
const investHeading4 = document.getElementById('header4');
const showUserAgreementButton = document.getElementById('showTermsButton');
const userAgreementModal = document.getElementById('userAgreement-text');
const detailWindowModal = document.getElementById('detail-window');
const weekPackButtons = document.getElementsByName('investment_plan');
const AmountElements = document.querySelectorAll('.pgx-2 div p:nth-child(5)');
const payButton = document.getElementById('payment-button');
const confirmPayModal = document.getElementById('pay-process1');
const validatePaymentModal = document.getElementById('pay-process2');
const cancelPayButton = document.getElementById('cancel-pay');
const confirmPayButton = document.getElementById('confirm-pay');
const confirmedTransButton = document.getElementById('confirmed-trans');
const investmentPlanButtons = document.querySelectorAll('button[name="investment_plan"]');
const paymentButton = document.querySelector('#payment-button');




const openModal = () => {
  document.getElementById("modal-backdrop").style.display = "flex";
}



const closeModal = () => {
			document.getElementById("modal-backdrop").style.display = "none";
		}



// adds backdrop to the user screen
const toggleBackdrop = () => {
    backdrop.classList.toggle('visible');
  };



// trigger a list of investment plans
const showInvestmentModal = () => {
    tagPricing.style.display = 'block';
    addInvestButton.style.display = 'none';
    investHeading1.style.display = 'none';
    investHeading2.style.display = 'block';
    removeInvestmentsButton.style.display = 'block';
    confirmPayModal.style.display = 'none';
    investHeading4.style.display = 'none';

}


const removeInvestmentModal = () => {
    tagPricing.style.display = 'none';
    addInvestButton.style.display = 'inline-block';
    investHeading2.style.display = 'none';
    investHeading1.style.display = 'block';
    removeInvestmentsButton.style.display = 'none';
    confirmPayModal.style.display = 'none';
    investHeading4.style.display = 'none';
}


function updateEnterAmount(amount){
  $(".pgx-2").html(' Enter Amount '+ amount)
};


const showDetailModal = () => {
  tagPricing.style.display = 'none';
  investHeading3.style.display = 'block';
  investHeading2.style.display = 'none';
  investHeading1.style.display = 'none';
  removeInvestmentsButton.style.display = 'none';
  removePlanDetailButton.style.display = 'block';
  detailWindowModal.style.display = 'inline-block';
  confirmPayModal.style.display = 'none';
  investHeading4.style.display = 'none';
};


var selectedInvestAmount = null ;
for (var i = 0; i < weekPackButtons.length; i++) {
  (function () {
    var btn = weekPackButtons[i];
    var investAmount = btn.innerHTML;
    var amount = btn.getAttribute('value');
    btn.onclick = function () {
      showDetailModal();
      updateEnterAmount(amount);
      var value = parseInt(investAmount.match(/\d+/)[0], 10);
      selectedInvestAmount = value ;
    };
  })
  ();
}



const removePlanDetailModal = () => {
  removePlanDetailButton.style.display = 'none';
  tagPricing.style.display = 'block';
  removeInvestmentsButton.style.display = 'block';
  removeInvestmentsButton.style.display = 'block';
  detailWindowModal.style.display = 'none';
  investHeading4.style.display = 'none';
  investHeading3.style.display = 'none';
  investHeading2.style.display = 'block';
  investHeading1.style.display = 'none';
  confirmPayModal.style.display = 'none';
}


const processPayment = () => {
  confirmPayModal.style.display = 'inline-block';
  detailWindowModal.style.display = 'none';
}

const validatePayment = () => {
  validatePaymentModal.style.display = 'inline-block';
  confirmPayModal.style.display = 'none';
  removePlanDetailButton.style.display = 'none';
  SelectedInvestment(selectedInvestAmount);
}

const showProgress = () => {
  validatePaymentModal.style.display = 'none';
  confirmPayModal.style.display = 'none';
  removePlanDetailButton.style.display = 'none';
  investHeading4.style.display = 'inline-block';
  investHeading3.style.display = 'none';

}


const SelectedInvestment = (selectedInvestAmount, userID) => {
  const amount = selectedInvestAmount;
  var userID = window.userID;

  // Send the selected investment information to the database using AJAX
  $.ajax({
    url: 'store_investment.php',
    type: 'POST',
    data: JSON.stringify({ amount: amount, userID: userID }),
    contentType: 'application/json',
    success: function(response) {
      console.log('Investment stored successfully.');
      console.log(amount);
      console.log(userID);
    },
    error: function(xhr, status, error) {
      console.error('Failed to store investment:', error);
    }
  });
}



const cancelPayment = () => {
  confirmPayModal.style.display = 'none';
  var selectedInvestAmount = null ;
  console.log(selectedInvestAmount);
  showDetailModal();
}



addInvestButton.addEventListener('click', showInvestmentModal);
removeInvestmentsButton.addEventListener('click', removeInvestmentModal);
removePlanDetailButton.addEventListener('click', removePlanDetailModal);
payButton.addEventListener('click', processPayment)
cancelPayButton.addEventListener('click', cancelPayment);
confirmPayButton.addEventListener('click', validatePayment);
confirmedTransButton.addEventListener('click', showProgress);
