<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 06/06/2018 16:59                */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

namespace BeerTender\enum;


class RequestState {

    const HTTP_SwitchingProtocols = 101;
    const HTTP_OK = 200;
    const HTTP_Created = 201;
    const HTTP_Accepted = 202;
    const HTTP_NonAuthoritativeInformation = 203;
    const HTTP_NoContent = 204;
    const HTTP_ResetContent = 205;
    const HTTP_PartialContent = 206;
    const HTTP_MultipleChoices = 300;
    const HTTP_MovedPermanently = 301;
    const HTTP_Found = 302;
    const HTTP_SeeOther = 303;
    const HTTP_NotModified = 304;
    const HTTP_UseProxy = 305;
    const HTTP_Unused = 306;
    const HTTP_TemporaryRedirect = 307;
    const HTTP_BadRequest = 400;
    const HTTP_Unauthorized = 401;
    const HTTP_PaymentRequired = 402;
    const HTTP_Forbidden = 403;
    const HTTP_NotFound = 404;
    const HTTP_MethodNotAllowed = 405;
    const HTTP_NotAcceptable = 406;
    const HTTP_ProxyAuthenticationRequired = 407;
    const HTTP_RequestTimeout = 408;
    const HTTP_Conflict = 409;
    const HTTP_Gone = 410;
    const HTTP_LengthRequired = 411;
    const HTTP_PreconditionFailed = 412;
    const HTTP_RequestEntityTooLarge = 413;
    const HTTP_RequestURITooLong = 414;
    const HTTP_UnsupportedMediaType = 415;
    const HTTP_RequestedRangeNotSatisfiable = 416;
    const HTTP_ExpectationFailed = 417;
    const HTTP_InternalServerError = 500;
    const HTTP_NotImplemented = 501;
    const HTTP_BadGateway = 502;
    const HTTP_ServiceUnavailable = 503;
    const HTTP_GatewayTimeout = 504;
    const HTTP_HTTPVersionNotSupported = 505;

    private static $message = array(
        101 => 'Switching Protocols',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => '(Unused)',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported'
    );

    public static function getMessage($http_State){
        return RequestState::$message[$http_State];
    }

}