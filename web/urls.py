from django.shortcuts import render

# Create your views here.
from django.views.generic.edit import CreateView
from django.urls import path
from web.models import web
from web.views import index, process



urlpatterns = [
    path('', index, name='index'),
    path('process/', process, name='process'),
    
    ###path('save/', save, name='save'),
] 
