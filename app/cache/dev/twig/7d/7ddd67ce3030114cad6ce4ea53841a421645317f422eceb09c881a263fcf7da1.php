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
        $__internal_e76b57ea3461882f2b8bf9889f505d2782a1573b1b076f4ebb0dd17a7029edb1 = $this->env->getExtension("native_profiler");
        $__internal_e76b57ea3461882f2b8bf9889f505d2782a1573b1b076f4ebb0dd17a7029edb1->enter($__internal_e76b57ea3461882f2b8bf9889f505d2782a1573b1b076f4ebb0dd17a7029edb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e76b57ea3461882f2b8bf9889f505d2782a1573b1b076f4ebb0dd17a7029edb1->leave($__internal_e76b57ea3461882f2b8bf9889f505d2782a1573b1b076f4ebb0dd17a7029edb1_prof);

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
