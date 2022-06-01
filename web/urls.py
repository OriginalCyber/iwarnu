from django.urls import path
from web.views import index, urgent, low, medium, show

urlpatterns = [
    path('index/', index, name='index'),
    path('', show, name='show'),
    path('urgent/', urgent, name='urgent'),
    path('low/', low, name='low'),
    path('medium/', medium, name='medium'),

]