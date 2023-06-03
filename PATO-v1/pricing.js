const tagPricing = document.getElementById('add-investment');
const addInvestButton = document.getElementById('invest-btn');
const removeInvestmentsButton = document.getElementById('back-InvestmentModal');
const removePlanDetailButton = document.getElementById('back-plansModal');

// const investHeading = document.getElementById('invest-heading');
const investHeading1 = document.getElementById('header1');
const investHeading2 = document.getElementById('header2');
const investHeading3 = document.getElementById('header3');
const investHeading4 = document.getElementById('header4');



const showUserAgreementButton = document.getElementById('showTermsButton');
const userAgreementModal = document.getElementById('userAgreement-text');
const detailWindowModal = document.getElementById('detail-window');

// const weekPackButton = document.getElementById('week-pack');
const weekPackButtons = document.getElementsByName('investment_plan');
const AmountElements = document.querySelectorAll('.pgx-2 div p:nth-child(5)');

const payButton = document.getElementById('payment-button');
const confirmPayModal = document.getElementById('pay-process1');
const validatePaymentModal = document.getElementById('pay-process2');

const cancelPayButton = document.getElementById('cancel-pay');
const confirmPayButton = document.getElementById('confirm-pay');

const confirmedTransButton = document.getElementById('confirmed-trans');

// const monthPackButton = document.getElementById('month-pack');
// const quarterPackButton = document.getElementById('quarter-pack');
// const halfYearPackButton = document.getElementById('half-year-pack');
// const yearPackButton = document.getElementById('year-pack');

// Select the investment plan buttons and payment button
const investmentPlanButtons = document.querySelectorAll('button[name="investment_plan"]');
const paymentButton = document.querySelector('#payment-button');







// const showUserAgreement = () => {
//   toggleBackdrop();
//   UserAgreementModal.classList.toggle('visible');
  
// }




// weekPackButton.forEach((button,index) => {
//   // weekPackButton.forEach((button) => {
//   weekPackButton.addEventListener('click', () => {
//     // Get the corresponding "Enter amount" element
//     // const AmountElement = AmountElements[index];

//     // Get the value from the button
//     const value = weekPackButton.textContent;

//     // Update the "Enter amount" text
//     // AmountElement.textContent = `5.Enter amount: ${value}`;
//     AmountElement[index].textContent = ` ${value}`;
//   });
// });


// buttons.forEach((button) => {
//   button.addEventListener('click', () => {
//     const amount = button.textContent;
//     enterAmountElement.textContent = `5. Enter amount: ${amount}`;
//   });
// }




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
  // removeInvestmentsButton.classList.add(right-button);

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
  // console.log(selectedInvestAmount);
}

const showProgress = () => {
  window.location.href = 'track_progress.php';
  validatePaymentModal.style.display = 'none';
  confirmPayModal.style.display = 'none';
  removePlanDetailButton.style.display = 'none';
  investHeading4.style.display = 'inline-block';
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









// API INTERGRATION CODE


                  // // Initialize the selected investment plan to null
                  // let selectedInvestmentPlan = null;


                  // // listens to user selected option from targeted value of an investment plan
                  // const updateInvestmentPlan = (event) => {
                  //   // Update the selected investment plan when the user clicks a button
                  //   selectedInvestmentPlan = event.target.value;
                  // }


                  // // processing payment after user clicks the button 
                  // const makePayment = (event) => {
                  //     // Prevent the default form submission behavior
                  //   event.preventDefault();
                  //       // Make a request to the payment API with the selected investment plan and other payment details
                  //   const paymentData = {
                  //     investment_plan: selectedInvestmentPlan,
                  //     amount: calculatePaymentAmount(selectedInvestmentPlan),
                  //     // Add other payment details here, such as the user's email or mobile number
                  //   };
                  //   const paymentRequest = new XMLHttpRequest();
                  //   paymentRequest.open('POST', 'payment_api.php');
                  //   paymentRequest.setRequestHeader('Content-Type', 'application/json');
                  //   paymentRequest.onload = () =>{
                  //     // Handle the payment API response here, such as displaying a success message or redirecting to a payment confirmation page
                  //     const response = JSON.parse(paymentRequest.responseText);
                  //     if (response.status === 'success') {
                  //       // Payment was successful
                  //       // Add the user's investment plan to the database
                  //       addInvestmentPlanToDatabase(selectedInvestmentPlan);
                  //     } else {
                  //       // Payment failed
                  //       // Display an error message or take other appropriate action
                  //     }
                  //   };
                  //   paymentRequest.send(JSON.stringify(paymentData));
                  // }



                  // // a function that gives the total amount of funds to be paid by the user
                  // const calculatePaymentAmount = () => {
                  //     // Calculate the payment amount based on the selected investment plan
                  //   // This could be done using a switch statement or other logic
                  //   let paymentAmount = null;
                  //   switch (investmentPlan) {
                  //     case 'plan1':
                  //       paymentAmount = 28000;
                  //       break;
                  //     case 'plan2':
                  //       paymentAmount = 55000;
                  //       break;
                  //     case 'plan3':
                  //       paymentAmount = 77000;
                  //       break;
                  //     case 'plan4':
                  //         paymentAmount = 110000;
                  //         break;  
                  //     case 'plan5':
                  //         paymentAmount = 315000;
                  //         break; 
                  //   }
                  //   return paymentAmount;
                  // }


                  // // adding investment plan to database after successful payment
                  // const addInvestmentPlanToDatabase = (investmentPlan) => {
                      
                  //   // Make an AJAX request to add the user's investment plan to the database using PHP
                  //   const addInvestmentPlanRequest = new XMLHttpRequest();
                  //   addInvestmentPlanRequest.open('POST', 'add_investment_plan.php');
                  //   addInvestmentPlanRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                  //   addInvestmentPlanRequest.onload = () => {
                  //     // Handle the response from the PHP script here
                  //     const response = JSON.parse(addInvestmentPlanRequest.responseText);
                  //     if (response.status === 'success') {
                  //       // Investment plan was added to the database successfully
                  //       // Display a success message or take other appropriate action
                  //     } else {
                  //       // Investment plan failed to be added to the database
                  //       // Display an error message or take other appropriate action
                  //     }
                  //   };
                  //   addInvestmentPlanRequest.send(`investment_plan=${investmentPlan}`);
                  // }



                  // // Add event listeners to the payment button and investment plan buttons
                  // paymentButton.addEventListener('click', makePayment);
                  // investmentPlanButtons.forEach(button => {
                  //   button.addEventListener('click', updateInvestmentPlan);
                  // });



addInvestButton.addEventListener('click', showInvestmentModal);
//showUserAgreementButton.addEventListener('click', openModal);
removeInvestmentsButton.addEventListener('click', removeInvestmentModal);
removePlanDetailButton.addEventListener('click', removePlanDetailModal);
payButton.addEventListener('click', processPayment)

cancelPayButton.addEventListener('click', cancelPayment);
confirmPayButton.addEventListener('click', validatePayment);
confirmedTransButton.addEventListener('click', showProgress);

// document.getElementById("showTermsButton").onclick = ()=>{
//   // openModal()
// }