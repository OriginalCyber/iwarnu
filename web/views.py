from django.shortcuts import render, HttpResponse

# Create your views here.
def index(request):
    return render(request, 'index.php')

def process(request):
    return render(request,'process.php')


#def save(request):
    return render(request,'save.php')