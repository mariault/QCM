<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3adc326513feabd4a58bd263c0be5700002679043271656c49dbf76ce88474ca extends Twig_Template
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
        $__internal_4b4d24bf30d53b6d46728a44787986effaba0fe16ca92c1c1486855b670afad1 = $this->env->getExtension("native_profiler");
        $__internal_4b4d24bf30d53b6d46728a44787986effaba0fe16ca92c1c1486855b670afad1->enter($__internal_4b4d24bf30d53b6d46728a44787986effaba0fe16ca92c1c1486855b670afad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4b4d24bf30d53b6d46728a44787986effaba0fe16ca92c1c1486855b670afad1->leave($__internal_4b4d24bf30d53b6d46728a44787986effaba0fe16ca92c1c1486855b670afad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
