from django.shortcuts import render

from django.http import  HttpResponse

def index(request):
	return HttpResponse("Qué hay papu! Estas en la vista de polls")
	
