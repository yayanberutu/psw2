#include <stdio.h>
#include <string.h>
int main(int argc, char const *argv[])
{
	//Cara 1
	typedef struct Resto b;

	struct Resto
	{
		char ikan[20];
		int harga;
	};


	//Cara 2
	typedef struct Kelas
	{
		char lokasi[20];
		int jlh_kursi;
	}y;

	b x;
	y a;
	strcpy(x.ikan,"Lele");
	x.harga=20000;
	strcpy(a.lokasi,"GD712");
	a.jlh_kursi=44;

	printf("%s\n",x.ikan );
	printf("%d\n",x.harga );
	printf("%s\n",a.lokasi );
	printf("%d\n",a.jlh_kursi );



	return 0;
}
