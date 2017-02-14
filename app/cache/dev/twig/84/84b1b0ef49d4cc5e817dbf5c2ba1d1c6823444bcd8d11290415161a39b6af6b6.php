<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7b609306134a8ff7352fd1530e29becf74c15a7070c4eb4f6a06e797582c5930 extends Twig_Template
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
        $__internal_b74f382c89d998de153d894109f985fae43c6b81a5bb3eb3f545277635c28199 = $this->env->getExtension("native_profiler");
        $__internal_b74f382c89d998de153d894109f985fae43c6b81a5bb3eb3f545277635c28199->enter($__internal_b74f382c89d998de153d894109f985fae43c6b81a5bb3eb3f545277635c28199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b74f382c89d998de153d894109f985fae43c6b81a5bb3eb3f545277635c28199->leave($__internal_b74f382c89d998de153d894109f985fae43c6b81a5bb3eb3f545277635c28199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
