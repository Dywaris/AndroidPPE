<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7c7f53e99ff4c27eadeeb4d14b459dae8a6be88504c50a7dc6b59e634c16df19 extends Twig_Template
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
        $__internal_df47658dab205cc990a44b6d0ce5e0f7c5888de02519377b3fe046d4e60bb4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df47658dab205cc990a44b6d0ce5e0f7c5888de02519377b3fe046d4e60bb4fd->enter($__internal_df47658dab205cc990a44b6d0ce5e0f7c5888de02519377b3fe046d4e60bb4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d62f2f14db12239bf660ab23203a1d8fe8b9be8709d36deeed9c6b8f2697971e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62f2f14db12239bf660ab23203a1d8fe8b9be8709d36deeed9c6b8f2697971e->enter($__internal_d62f2f14db12239bf660ab23203a1d8fe8b9be8709d36deeed9c6b8f2697971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_df47658dab205cc990a44b6d0ce5e0f7c5888de02519377b3fe046d4e60bb4fd->leave($__internal_df47658dab205cc990a44b6d0ce5e0f7c5888de02519377b3fe046d4e60bb4fd_prof);

        
        $__internal_d62f2f14db12239bf660ab23203a1d8fe8b9be8709d36deeed9c6b8f2697971e->leave($__internal_d62f2f14db12239bf660ab23203a1d8fe8b9be8709d36deeed9c6b8f2697971e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
