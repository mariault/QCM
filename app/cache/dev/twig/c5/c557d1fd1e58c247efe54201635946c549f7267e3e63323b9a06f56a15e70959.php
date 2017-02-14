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
        $__internal_03f4f00ff7e03f6bcfce5006d3a77040ab93b4f324cc57f1df1db543cdae526b = $this->env->getExtension("native_profiler");
        $__internal_03f4f00ff7e03f6bcfce5006d3a77040ab93b4f324cc57f1df1db543cdae526b->enter($__internal_03f4f00ff7e03f6bcfce5006d3a77040ab93b4f324cc57f1df1db543cdae526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_03f4f00ff7e03f6bcfce5006d3a77040ab93b4f324cc57f1df1db543cdae526b->leave($__internal_03f4f00ff7e03f6bcfce5006d3a77040ab93b4f324cc57f1df1db543cdae526b_prof);

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
