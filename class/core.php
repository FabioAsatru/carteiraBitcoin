<?php
class core
  {
    private static $nonce;
    private static $chave;
    private static $codigoChave;
    private static $pin;
    private static $certificado;
    private static $apiPrivada;
    private static $apiPublica;
    private static $baseUrl;

    public function __construct($chave, $codigoChave, $pin, $temTeuServidorCertificado = false)
      {
        $this->chave = $chave;
        $this->pin = $pin;
        $this->codigoChave = $codigoChave;
        $this->certificado = (bool)$temTeuServidorCertificado;
        $this->baseUrl = "https://www.mercadobitcoin.net/";
        $this->version = "v. beta 0.1";
        $this->apiPrivada = Array("getInfo", "OrderList", "Trade", "CancelOrder");
        $this->apiPublica = Array("ticker", "orderbook", "trades", "ticker_litecoin", "orderbook_litecoin", "trades_litecoin");
      }

    private function nonce()
      {
        list($usec, $sec) = explode(" ", microtime());
        return (int)((float)$usec + (float)$sec);
      }
      
    private function signMessage($message)
      {
        $signedMessage = hash_hmac('sha512', $message, $this->codigoChave);
        return $signedMessage;
      }
     
    private function callApi($api, $params = Array())
      {
        foreach($this->apiPrivada as $value)
          {
            if($api == $value)
              {
                $this->nonce = $this->nonce();
                $header = Array();
                $message = $value . ":" . $this->pin . ":" . $this->nonce;
                $header[] = "Sign: " . $this->signMessage($message);
                $header[] = "Key: "  . $this->chave;
                $params["method"] = $value;
                $params["tonce"]  = $this->nonce;
                return $this->doRequest("POST", $params, $header);
              }
          }
        foreach($this->apiPublica as $value)
          {
            if($api == $value)
              { 
                return $this->doRequest("GET", Array("method" => $value));
              }
          }
        return false;
      }
    
    private function doRequest($metodo, $params, $header = Array())
      {
        foreach(array_keys($params) as $key)
          {
            $params[$key] = urlencode($params[$key]);
          }
        $postFields = http_build_query($params);
        $ch = curl_init();
        $options = Array(
                          CURLOPT_HEADER         => false,
                          CURLOPT_USERAGENT      => urlencode('Módulo de API Mercado Bitcoin em PHP ' . $this->version),
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_SSL_VERIFYPEER => $this->certificate, 
                          CURLOPT_SSL_VERIFYHOST => $this->certificate
                        );
        if($metodo == "POST")
          {
            $options[CURLOPT_URL]  = $this->baseUrl . "tapi/v3/";
            $options[CURLOPT_POST] = true;
            $options[CURLOPT_HTTPHEADER] = $header;
            $options[CURLOPT_POSTFIELDS] = $postFields;
          }
        else
          {
            $options[CURLOPT_URL] = $this->baseUrl . "api/" . $params["method"] . "/";
          }
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($status == 200)
          {
            return json_decode($response, true);
          }
        else
          {
            /* Debug */
            var_dump($response);
            var_dump($status);
            echo "\nHTTP Status: " . $status . "\n";
            exit(0);
          }
        return false;
      }
    
    private function removeVoid($params = Array())
      {
        $return = Array();
        foreach($params as $key => $value)
          {
            if($value != "")
              {
                $return[$key] = $value;
              }
          }
        return $return;
      }
   
    /*#########################APIs Públicas######################################*/ 
    /**
     * GET https://www.mercadobitcoin.com.br/api/ticker/
     * retorna o ticker de preço do Bitcoin.
     */
    public function ticker()
      { 
        return $this->callApi(__FUNCTION__);
      }
      
    /**
     * GET https://www.mercadobitcoin.com.br/api/orderbook/
     * retorna as ofertas de compra e venda de Bitcoin.
     */ 
    public function orderbook()
      {
        return $this->callApi(__FUNCTION__);
      }
      
    /**
     * GET https://www.mercadobitcoin.com.br/api/trades/
     * retorna as negociações ou operações realizadas de Bitcoin.
     */
    public function trades()
      {
        return $this->callApi(__FUNCTION__);
      }
      
    /**
     * GET https://www.mercadobitcoin.com.br/api/ticker_litecoin/
     * retorna o ticker de preço do Litecoin.
     */
    public function ticker_litecoin()
      {
        return $this->callApi(__FUNCTION__);
      }
    
    /**
     * GET https://www.mercadobitcoin.com.br/api/orderbook_litecoin/
     * retorna as ofertas de compra e venda de Litecoin.
     */
    public function orderbook_litecoin()
      {
        return $this->callApi(__FUNCTION__);
      }
    
    /**
     * GET https://www.mercadobitcoin.com.br/api/trades_litecoin/
     * retorna as negociações ou operações realizadas de Litecoin.
     */
    public function trades_litecoin()
      {
        return $this->callApi(__FUNCTION__);
      }
  }
?>