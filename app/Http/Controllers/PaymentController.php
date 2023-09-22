<?php

namespace App\Http\Controllers;

use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
class PaymentController extends Controller
{
  public function generateClientToken(){
    
    $gateway = new Gateway ([
      'environment' => env('BRAINTREE_ENV'),
      'merchantId' => env('BRAINTREE_MERCHANT_ID'),
      'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
      'privateKey' =>env('BRAINTREE_PRIVATE_KEY')
    ]);

    $clientToken = $gateway->clientToken()->generate();

    return response()->json([
      'clientToken' => $clientToken,
      'message' => 'risposta dal back'
    ]);
  }

  public function storeNonce(Request $request){
    
    $nonce = $request->input('nonce');

    $gateway = new Gateway ([
      'environment' => env('BRAINTREE_ENV'),
      'merchantId' => env('BRAINTREE_MERCHANT_ID'),
      'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
      'privateKey' =>env('BRAINTREE_PRIVATE_KEY')
    ]);

    $result = $gateway->transaction()->sale([
      'amount' => '10.00', 
      'paymentMethodNonce' => $nonce,
      'options' => [
          'submitForSettlement' => true,
      ],
    ]);

    if ($result->success) {
      // La transazione è stata accettata
      return response()->json(['success' => true, 'message' => 'Pagamento accettato']);
    } else {
      // La transazione è stata rifiutata o c'è stato un errore
      return response()->json(['success' => false, 'message' => 'Pagamento rifiutato']);
  }

  }
}

  