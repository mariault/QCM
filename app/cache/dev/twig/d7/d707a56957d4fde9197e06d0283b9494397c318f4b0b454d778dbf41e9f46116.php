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
        $__internal_eae1e5350014066f92ab0405fe99e307f31ef5480a2f8d72eda2af7a03260fd4 = $this->env->getExtension("native_profiler");
        $__internal_eae1e5350014066f92ab0405fe99e307f31ef5480a2f8d72eda2af7a03260fd4->enter($__internal_eae1e5350014066f92ab0405fe99e307f31ef5480a2f8d72eda2af7a03260fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_eae1e5350014066f92ab0405fe99e307f31ef5480a2f8d72eda2af7a03260fd4->leave($__internal_eae1e5350014066f92ab0405fe99e307f31ef5480a2f8d72eda2af7a03260fd4_prof);

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
