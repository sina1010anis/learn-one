<?php


namespace App\Buy;
use Zarinpal\Zarinpal;

class ZarinPal_pay implements InterfaceTypeClass
{
    public function send($price , $type)
    {
        $zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
        $zarinpal->enableSandbox(); // active sandbox mod for test env
        // $zarinpal->isZarinGate(); // active zarinGate mode
        $results = $zarinpal->request(

            ($type == 0) ? route('VerifyItemVideo'):route('VerifyItem'),          //required
            $price,                                  //required
            'testing',                             //required
            'me@example.com',                      //optional
            '09000000000'                          //optional
        );
        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }
        //it will redirect to zarinpal to do the transaction or fail and just echo the errors.
        //$results['Authority'] must save somewhere to do the verification

    }

    public function verify($price)
    {
        return redirect()->route('home');
    }
}
