import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from '@/components/ui/card'
import "./globals.css"

export default function Home() {
  return (
    <div className='flex items-center justify-center'>
    <Card className="w-[500px] h-[700px]">
      <CardHeader>
          <CardTitle>
          Hello World
          </CardTitle>
          <CardDescription>
            AAAAAAAAA
          </CardDescription>
        </CardHeader>
        <CardContent>
          <p>Mensagens</p>
        </CardContent>
        <CardFooter>
          <form action=""></form>
        </CardFooter>
    </Card>
    </div>
      )
}
