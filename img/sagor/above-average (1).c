#include<stdio.h>
int main()
{
    int casee;

    scanf("%d",&casee) ;

    for(int i = 1 ; i <= casee ; i++ )
    {
        int n;
        scanf("%d",&n) ;

        double value[ 105 ] ;
        double sum = 0 ;

        for(int j = 1 ; j <= n ; j++ )
        {
            double m ;
            scanf("%lf",&m) ;
            sum = sum + m ;
            value[j] = m ;
        }

        double x = n ;
        double Above_Average = sum / x ;

       double cnt = 0 ;

        for(int j = 1 ; j <= n ; j++ )
        {
            if( value[j] >  Above_Average )
            {
                cnt = cnt + 1 ;
            }
        }

        double ans = ( cnt / x ) * 100.0 ;

        printf("%.3lf", ans) ;
        printf("%c", '%');
        printf("\n");
    }

}
