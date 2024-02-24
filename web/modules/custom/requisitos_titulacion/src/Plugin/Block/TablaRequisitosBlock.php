<?php declare(strict_types = 1);

namespace Drupal\requisitos_titulacion\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Ajax\AjaxResponse;


/**
 * Provides a tabla requisitos block.
 *
 * @Block(
 *   id = "requisitos_titulacion_tabla_requisitos",
 *   admin_label = @Translation("Tabla requisitos"),
 *   category = @Translation("Custom"),
 * )
 */
final class TablaRequisitosBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    

    $build['link_lic'] = [
			'#title' => $this->t('Licenciaturas, Técnico Superior Universitario y Carreras Técnicas'),
			'#type' => 'link',
			'#url' => Url::fromRoute('tabla_requisitos.link_lic', ['nivel_pro' => 1]), 
			'#attributes' => [
				'class' => 'use-ajax',
			],
			'#ajax' => [
		    'wrapper' => 'tabla_requisitos',
		  ],
		];

		$build['br'] = [
			'#type' => 'html_tag', 
			'#tag' => 'br',
		];

		$build['link_esp'] = [
			'#title' => $this->t('Especialidades y Cursos de Alta Especialidad Médica'),
			'#type' => 'link',
			'#url' => Url::fromRoute('tabla_requisitos.link_lic',['nivel_pro' => 2]), 
			'#attributes' => [
				'class' => 'use-ajax',
			],
			'#ajax' => [
		    'wrapper' => 'tabla_requisitos',
		  ],
		];

		$build['br_2'] = [
			'#type' => 'html_tag', 
			'#tag' => 'br',
		];

		$build['link_pos'] = [
			'#title' => $this->t('Posgrados (maestrías y doctorados)'),
			'#type' => 'link',
			'#url' => Url::fromRoute('tabla_requisitos.link_lic',['nivel_pro' => 3]), 
			'#attributes' => [
				'class' => 'use-ajax',
			],
			'#ajax' => [
		    'wrapper' => 'tabla_requisitos',
		  ],
		];

		$build['br_3'] = [
			'#type' => 'html_tag', 
			'#tag' => 'br',
		];

		$build['link_cur'] = [
			'#title' => $this->t('Cursos posbásicos'),
			'#type' => 'link',
			'#url' => Url::fromRoute('tabla_requisitos.link_lic',['nivel_pro' => 4]), 
			'#attributes' => [
				'class' => 'use-ajax',
			],
			'#ajax' => [
		    'wrapper' => 'tabla_requisitos',
		  ],
		];

		$build['div_tabla'] = [
			'#type' => 'html_tag', 
			'#tag' => 'div',
			'#value' => 'Selecciona un nivel profesional',
			'#attributes' => [
				'id' => 'tabla_requisitos',
			],
			'#attached' => [
        'library' => [
          'requisitos_titulacion/tabla-requisitos',
        ],
      ],
		];

    return $build;
  
  }

}
