<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_992fb61ce3f02235dbaca1e9b20f40654d85ce9dead33e3a96c030aea689f636 extends Twig_Template
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
        $__internal_e7d59e445b56643a0742652847838fde67fca0a2926cbc1fe1684aeec85f8e3d = $this->env->getExtension("native_profiler");
        $__internal_e7d59e445b56643a0742652847838fde67fca0a2926cbc1fe1684aeec85f8e3d->enter($__internal_e7d59e445b56643a0742652847838fde67fca0a2926cbc1fe1684aeec85f8e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e7d59e445b56643a0742652847838fde67fca0a2926cbc1fe1684aeec85f8e3d->leave($__internal_e7d59e445b56643a0742652847838fde67fca0a2926cbc1fe1684aeec85f8e3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
