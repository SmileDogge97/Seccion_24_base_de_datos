package com.vidamrr.ejemplobdoffline.Utilidades

interface HttpResponse {

    fun httpResponseSuccess(response: String)
    //TODO: 1. Añadir un httpErrorResponse
    fun httpErrorResponse(response: String)
}