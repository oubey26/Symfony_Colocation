<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_741f3fcf2582d3569196f34b45b70f48d7ffa32c64002b8e9e3f19d900adcbb3 extends Twig_Template
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
        $__internal_de4ec0d379871f9c21830670214617a7ebfe8c262eda45a56ceb4de986a566a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4ec0d379871f9c21830670214617a7ebfe8c262eda45a56ceb4de986a566a1->enter($__internal_de4ec0d379871f9c21830670214617a7ebfe8c262eda45a56ceb4de986a566a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0e36cd23d455fc68547f1869cc8d6abfa7a2d64b6093628317259e41847a02de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e36cd23d455fc68547f1869cc8d6abfa7a2d64b6093628317259e41847a02de->enter($__internal_0e36cd23d455fc68547f1869cc8d6abfa7a2d64b6093628317259e41847a02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_de4ec0d379871f9c21830670214617a7ebfe8c262eda45a56ceb4de986a566a1->leave($__internal_de4ec0d379871f9c21830670214617a7ebfe8c262eda45a56ceb4de986a566a1_prof);

        
        $__internal_0e36cd23d455fc68547f1869cc8d6abfa7a2d64b6093628317259e41847a02de->leave($__internal_0e36cd23d455fc68547f1869cc8d6abfa7a2d64b6093628317259e41847a02de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
