from sqlite3 import Row
from sqlite3 import DatePickerInput
from tkinter.tix import COLUMN
from django import forms
from django.db import reset_queries

from web.models import web
from web.models import models
from web.models import DatePickerInput
from web.models import DatePickerInput
from web.models import InlineRadios
from web.models import FormHelper
from web.models import Layout, Submit, Reset, Row, Column


class UngentForm(forms.ModelForm):
    class Meta:
        model=web
        fields="__all__"        
        widgets={
            'birthdate':DatePickerInput(format='%Y-%m-%d'),
            'gender': forms.RadioSelect(),
            'fruit': forms.RadioSelect(),
        }
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.helper = FormHelper()  
        self.helper.form_method = 'post' 
        self.helper.add_input(Submit('submit','Submit'))        
        self.helper.add_input(Submit('reset','Reset',css_class="btn btn-outline-primary"))        
        
class AdvancedUngentForm(forms.ModelForm):
    class Meta:
        model=web
        fields="__all__"
        labels={
                'fullname': 'ชื่อ',
                'gender':'เพศ',
                'birthdate':'วันเดือนปีเกิด',
                'fruit':'ผลไม้ที่ท่านชอบ',
                'comment':'ข้อเสนอแนะ',
            }
        widgets={
                'birthdate':DatePickerInput(format='%Y-%m-%d'),
            }
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.helper = FormHelper()  
        self.helper.form_method = 'post'      
        self.helper.layout = Layout(
            Row(
                COLUMN('fullname' ,css_class="form-group col-4"),                
                COLUMN('email'    ,css_class="form-group col-4"),
                COLUMN('birthdate',css_class="form-group col-4"),
                css_class='form-row',
            ),
            Row(
                COLUMN(InlineRadios('gender'),css_class="form-group col-4"),
                COLUMN(InlineRadios('fruit'),css_class="form-group col-4"),
            ),
            'comment',
            Submit('submit','ส่งแบบสำรวจ'),
            reset_queries('reset','ล้างข้อมูล'),
        )
        