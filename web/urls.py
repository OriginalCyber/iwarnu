from django.urls import path
from web.views import index, urgent, low, medium

urlpatterns = [
    path('', index),
    path('urgent/', urgent, name='urgent'),
    path('low/', low, name='low'),
    path('medium/', medium, name='medium')
]