import datetime
from django.utils import timezone
from django.db import models

#Modelo para crear preguntas
class Question(models.Model):
	question_text= models.CharField(max_length=200)
	pub_date = models.DateTimeField('Fecha de publicación')
	def __str__(self):
		return self.question_text
	def pub_recient(self):
		return self.pub_date <=timezone.now() - datetime.timedelta(days=1) 
#Modelo para elegir preguntas
class Choice(models.Model):
	question= models.ForeignKey(Question, on_delete=models.CASCADE)
	choice_text= models.CharField(max_length=200)
	votes = models.IntegerField(default=0)
	def __str__(self):
		return self.choice_text

