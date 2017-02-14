<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ed635224341e9a5ec3381bef87d28b62ff4948f9d08ce4cef883489795852c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f2d5ca2fe0db127981a9e070fe6336c0162bea7e6e72e5ab28b32b88164b011 = $this->env->getExtension("native_profiler");
        $__internal_0f2d5ca2fe0db127981a9e070fe6336c0162bea7e6e72e5ab28b32b88164b011->enter($__internal_0f2d5ca2fe0db127981a9e070fe6336c0162bea7e6e72e5ab28b32b88164b011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0f2d5ca2fe0db127981a9e070fe6336c0162bea7e6e72e5ab28b32b88164b011->leave($__internal_0f2d5ca2fe0db127981a9e070fe6336c0162bea7e6e72e5ab28b32b88164b011_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
