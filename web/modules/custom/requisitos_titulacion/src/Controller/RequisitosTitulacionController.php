<?php declare(strict_types = 1);

namespace Drupal\requisitos_titulacion\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Returns responses for Requisitos titulacion routes.
 */
final class RequisitosTitulacionController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build($nivel_pro): array {

    $datos_de_tabla = $this->obtener_datos_tabla($nivel_pro); 
    
    //El header en este caso sera el mismo para todas las tablas
    $header = ['Requisito','Responsable','Entrega del requisito'];

    $build['table'] = [
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $datos_de_tabla['rows'],
      '#attributes' => [
        'class' => ['sticky-header-table'],
      ],
      'colgroups' => '',
      '#caption' => $datos_de_tabla['caption'],
    ];

    $build['table']['#prefix'] = '<div id="tabla_requisitos">';
    $build['table']['#suffix'] = '</div>';
    

    return $build;
  }

  public function obtener_datos_tabla($id_nivel){

    switch ($id_nivel) {
      case 1:
      return $this->datos_licenciatura();
        break;
      case 2:
        return $this->datos_especialidades();
        break;
      case 3:
        return $this->datos_posgrados();
        break;
      case 4:
        return $this->datos_cursos();
        break;
      
      default:
        return $this->datos_default();
        break;
    }

  }

  public function datos_licenciatura(){
    $rows[] = ['Registro de trámite','Egresado','en línea'];
    $datos_de_tabla = [
          'caption'=> 'Licenciaturas, Técnico Superior Universitario y Carreras Técnicas',
          'rows' => $rows,
        ];

    return $datos_de_tabla;
  }

  public function datos_especialidades(){
    $rows[] = ['4','5','6'];
    $datos_de_tabla = [
          'caption'=> 'Especialidades y Cursos de Alta Especialidad Médica',
          'rows' => $rows,
        ];

    return $datos_de_tabla;
  }

  public function datos_posgrados(){
    $rows[] = ['7','8','9'];
    $datos_de_tabla = [
          'caption'=> 'Posgrados (maestrías y doctorados)',
          'rows' => $rows,
        ];

    return $datos_de_tabla;
  }

  public function datos_cursos(){
    $rows[] = ['10','11','12'];
    $datos_de_tabla = [
          'caption'=> 'Cursos posbásicos',
          'rows' => $rows,
        ];

    return $datos_de_tabla;
  }

  public function datos_default(){
    $rows[] = [];
    $datos_de_tabla = [
          'caption'=> 'Selecciona una opcion valida',
          'rows' => $rows,
        ];

    return $datos_de_tabla;
  }

  

}
