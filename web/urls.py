from django.shortcuts import render

# Create your views here.
from django.views.generic.edit import CreateView
from django.urls import path
from web.views import index, indexli, linenotify


urlpatterns = [
    path('', index, name='index'),
    path('indexli/', indexli, name='indexli'),
    path('linenotify/', linenotify, name='linenotify'),
    
    ###path('postit/', postit, name='postit'),
    ###path('process/', process, name='process'),
    ###path('save/', save, name='save'),
] 
