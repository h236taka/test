#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  if( (n & 1) == 0 ){               // nと1のANDを取った時にnが偶数の時はANDが1にならないので0とした
    printf("%d は偶数です\n", n);
  }
  return 0;
}
