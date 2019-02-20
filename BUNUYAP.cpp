#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
typedef struct _tarih{
	int gun; int ay; int yil;
} tarih;

bool Kontrol(tarih A){
	if(A.gun<=0 || A.gun>31 || A.ay<1 || A.ay>12 || A.yil<1900) return false;
	if(A.yil%4!=0 && A.ay==2 && A.gun>28) return false;
	if(A.yil%4==0 && A.ay==2 && A.gun>29) return false;
	if((A.ay==4 || A.ay==6 || A.ay==9 || A.ay==11) && A.gun>30) return false;
	return true;
}

void Goster(tarih eq){
	printf("\n%d/%d/%d", eq.gun, eq.ay, eq.yil);
}

tarih fark(tarih a, tarih b){
	tarih c;
	if(Kontrol(a)==false || Kontrol(b)==false){printf("Hatalı Tarih Bilgisi");exit(1);}
	if(a.gun<b.gun){a.gun+=30;b.gun--;}
	if(a.ay<b.ay){a.ay+=12;a.yil--;}
	if(a.yil<b.yil){printf("Fark Hesaplanamaz");exit(1);}
	c.gun=a.gun-b.gun;c.ay=a.ay-b.ay;c.yil=a.yil-b.yil;
	return c;
}

int main(){
	int gunler[] = {0,31,28,31,30,31,30,31,31,30,31,30,31};int i=0;
	tarih a;
	a.ay=1;
	//Goster(fark(a,b));
	setlocale(LC_ALL, "Turkish");
	printf("(1-365) veri gir : ");scanf("%d",&a.gun);
	printf("Yil gir : ");scanf("%d",&a.yil);
	if(a.yil%4==0) {gunler[2]++;a.gun++;}
	for(i=1;i<=13;i++){
		if(gunler[i]<a.gun){
			a.gun -= gunler[i];//printf("%d-",a.gun);
			a.ay++;printf("%d. ",a.gun);
		}else break;
	}
	printf("\ngun : %d, ay : %d, yil : %d",a.gun,a.ay,a.yil);
}
