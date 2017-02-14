<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_64defb6e0531d7af7969771390722cbe534c68b6761eeba5bc5821fbf7acda0d extends Twig_Template
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
        $__internal_208be8e0f9c5a13eb3cc2f5fc8c4528017ddaca720badc1b2f75ebfab456e48b = $this->env->getExtension("native_profiler");
        $__internal_208be8e0f9c5a13eb3cc2f5fc8c4528017ddaca720badc1b2f75ebfab456e48b->enter($__internal_208be8e0f9c5a13eb3cc2f5fc8c4528017ddaca720badc1b2f75ebfab456e48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_208be8e0f9c5a13eb3cc2f5fc8c4528017ddaca720badc1b2f75ebfab456e48b->leave($__internal_208be8e0f9c5a13eb3cc2f5fc8c4528017ddaca720badc1b2f75ebfab456e48b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
