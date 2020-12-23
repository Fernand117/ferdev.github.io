import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { InicioComponent } from './pages/inicio/inicio.component';
import { ServiciosComponent } from './pages/servicios/servicios.component';
import { ProductosComponent } from './pages/productos/productos.component';
import { AcercadeComponent } from './pages/acercade/acercade.component';


const routes: Routes = [
  {
    path: 'inicio', component: InicioComponent
  },
  {
    path: 'servicios', component: ServiciosComponent
  },
  {
    path: 'productos', component: ProductosComponent
  },
  {
    path: 'acercade', component: AcercadeComponent
  },
  {
    path: '**', redirectTo: 'inicio', pathMatch: 'full'
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
