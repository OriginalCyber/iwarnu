from django.shortcuts import render

# Create your views here.
from django.views.generic.edit import CreateView
from django.urls import path
from web.views import index, indexli, line


urlpatterns = [
    path('', index, name='index'),
    path('indexli/', indexli, name='indexli'),
    path('line/', line, name='line'),
    
    ###path('postit/', postit, name='postit'),
    ###path('process/', process, name='process'),
    ###path('save/', save, name='save'),
] 
